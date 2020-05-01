<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //Validasi Sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $token = $this->input->post('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        $user2 = $this->db->get_where('login_token', ['token' => $token])->row_array();
        //Jika user ada
        if (isset($user, $user2)) {

            $user_token = $this->db->get_where('login_token', ['token' => $token])->row_array();
            //Jika user aktif
            if ($user['is_active'] == 1) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    //cek password
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id'],
                            'token' => $user2['token']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 1) {
                            redirect('admin');
                        } else {
                            redirect('user');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong Password!</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token Expired, request ulang token !</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This Email has not been Activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email tidak Terdaftar atau Token Tidak Valid!</div>');
            redirect('auth');
        }
    }

    // private function _login()
    // {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');

    //     $user = $this->db->get_where('user', ['email' => $email])->row_array();

    //     //Jika user ada
    //     if ($user) {
    //         //Jika user aktif
    //         if ($user['is_active'] == 1) {
    //             //cek password
    //             if (password_verify($password, $user['password'])) {
    //                 $data = [
    //                     'email' => $user['email'],
    //                     'role_id' => $user['role_id']
    //                 ];
    //                 $this->session->set_userdata($data);
    //                 if ($user['role_id'] == 1) {
    //                     redirect('admin');
    //                 } else {
    //                     redirect('user');
    //                 }
    //             } else {
    //                 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //         Password salah!</div>');
    //                 redirect('auth');
    //             }
    //         } else {
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //         Email ini belum diaktivasi!</div>');
    //             redirect('auth');
    //         }
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    //         Email Email Belum Terdaftar!</div>');
    //         redirect('auth');
    //     }
    // }

    public function getToken()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Token';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/token');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email');

            //jika user sudah aktif
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {

                //$token = base64_encode(random_bytes(32));
                $token = base64_encode(random_bytes(3));
                $date_created = time();

                //$login_token = [
                //  'useremail' => $email,
                //  'token' => $token,
                //  'date_created' => time()  
                //];
                $email = $this->input->post('email');


                //$login_token = [

                //  'token' => $token,
                //'date_created' => time() 

                //];

                $this->db->set('token', $token);
                $this->db->set('date_created', $date_created);
                $this->db->where('email', $email);
                $this->db->update('login_token');


                //$this->db->update('login_token', $login_token);
                $this->_sendEmail($token, 'getToken');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Cek Email anda untuk mendapatkan token login !</div>');
                redirect('auth');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not Registered or Not Activated!</div>');
                redirect('auth/forgotpassword');
            }
        }
    }


    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already Registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too Short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Account Anda Telah Dibuat. Please Activate Your Account!</div>');
            redirect('auth');
        }
    }

    public function registration_admin()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('profil', 'Profil', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already Registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too Short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Telah Ada!</div>');
            redirect('admin');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'profil' => htmlspecialchars($this->input->post('profil', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];
            $token_login = base64_encode(random_bytes(3));
            $login_token = [
                'email' => $email,
                'token' => $token_login,
                'date_created' => time()
            ];

            $data_daerah = [
                'email' => $email
            ];

            $this->db->insert('user', $data);
            $this->db->insert('data_daerah', $data_daerah);
            $this->db->insert('user_token', $user_token);
            $this->db->insert('login_token', $login_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Account Anda Telah Dibuat. Please Activate Your Account!</div>');
            redirect('admin');
        }
    }

    public function regis()
    {
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('msg', '<div class="alert text-center alert-danger" role="alert">Data Telah Ada!</div>');
            redirect('admin');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $profil = $this->input->post('profil');


            $data = array(
                'name' => $name,
                'email' => $email,
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'profil' => $profil,
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            );

            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];
            $token_login = base64_encode(random_bytes(3));
            $login_token = [
                'email' => $email,
                'token' => $token_login,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);
            $this->db->insert('login_token', $login_token);

            $this->_sendEmail($token, 'verify');
            // helper_log("add", "Menambah data Masyarakat");

            // $this->form_validation->set_rules('name', 'Name', 'required|trim');
            // $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[data_masyarakat.nik]', [
            //     'is_unique' => 'NIK ini telah di Inputkan!'
            // ]);
            // $this->form_validation->set_rules('nik', 'Name', 'required|trim');

            // $this->m_data->input_data($data, 'data_masyarakat');
            $this->session->set_flashdata('message', '<div class="alert text-center alert-success" role="alert">Data Telah Dimasukkan!</div>');
            redirect('admin');
        }
    }



    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'kecamatanbangkalan@gmail.com',
            'smtp_pass' => 'kecamatanbangkalan69112',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->email->initialize($config);
        $this->load->library('email', $config);

        $this->email->from('kecamatanbangkalan@gmail.com', 'Kecamatan Bangkalan');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification!!!');
            $this->email->message('Click this link to verify your account : <a 
            href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password!!!');
            $this->email->message('Click this link to reset your Password : <a 
            href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        } elseif ($type == 'getToken') {
            $this->email->subject('Token untuk login!!!');
            $this->email->message('Copy token : ' . $token);
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been Activated! Please login.</div>');
                    redirect('auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account Activation Failed! Token Expired!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account Activation Failed! Token Invalid!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account Activation Failed! Wrong Email!</div>');
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Telah Logout!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }


    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Forgot Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/forgot-password');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please Check your Email to reset your Password!</div>');
                redirect('auth/forgotpassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not Registered or Not Activated!</div>');
                redirect('auth/forgotpassword');
            }
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset Password Failed! Wrong Token!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset Password Failed! Wrong Email!</div>');
            redirect('auth');
        }
    }


    public function changePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/change-password');
            $this->load->view('templates/auth_footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);

            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been Changed! Please Login!</div>');
            redirect('auth');
        }
    }
}
