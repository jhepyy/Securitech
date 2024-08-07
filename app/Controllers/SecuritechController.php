<?php

namespace App\Controllers;

use App\Models\SecuritechModel;
use CodeIgniter\Controller;

class SecuritechController extends BaseController
{
    public function index()
    {
        return view('login_Page');
    }

    public function admin()
    {
        return view('admin/admin_dashboards');
    }

    public function student()
    {
        $model = new SecuritechModel();
        $data['user_students'] = $model->findall();
        return view('admin/admin_Students', $data);
    }

    public function instructor()
    {
        return view('admin/admin_Instructor');
    }

    public function staff()
    {
        return view('admin/admin_Staff');
    }

    public function attendanceLog()
    {
        return view('admin/admin_AttendanceLog');
    }
    
    public function attendanceLogs()
    {
        return view('admin/admin_AttendanceLogs');
    }

    public function schedule()
    {
        return view('admin/admin_Schedule');
    }

    public function reports()
    {
        return view('admin/admin_GenerationReport');
    }

    public function equipment()
    {
        return view('admin/admin_Equipment');
    }

    public function import()
    {
        $file = $this->request->getFile('csvFile');

        // Validate the file upload
        if (!$file->isValid() || $file->getExtension() !== 'csv') {
            return redirect()->back()->with('error', 'Invalid file. Please upload a CSV file.');
        }

        // Use the file's temporary path to read the CSV file
        $filePath = $file->getTempName();
        $data = [];

        if (($handle = fopen($filePath, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle)) !== FALSE) {
                $data[] = $row;
            }
            fclose($handle);
        }

        // Process and insert the data into the database
        $this->saveDataToDatabase($data);

        // Set a success message
        return redirect()->back()->with('message', 'CSV data imported successfully.');
    }

    private function saveDataToDatabase(array $data)
    {
        $model = new SecuritechModel();

        // Loop through the data and save each row
        foreach ($data as $row) {
            // Make sure to map columns correctly
            $model->save([
                'sn' => $row[0],
                'picture' => isset($row[1]) ? base64_decode($row[1]) : null, // Example: Handle image if needed
                'fname' => $row[2],
                'mname' => $row[3],
                'lname' => $row[4],
                'course' => $row[5],
                'year_section' => $row[6],
                'sex' => $row[7],
            ]);
        }
    }


    public function save()
    {
        $model = new SecuritechModel();

        $file = $this->request->getFile('picture');
        $fileContent = null;

        if ($file->isValid() && !$file->hasMoved()) {
            $fileContent = file_get_contents($file->getTempName());
        }

        $data = [
            'sn' => $this->request->getPost('sn'),
            'picture' => $fileContent, // Store image data
            'fname' => $this->request->getPost('fname'),
            'mname' => $this->request->getPost('mname'),
            'lname' => $this->request->getPost('lname'),
            'course' => $this->request->getPost('course'),
            'year_section' => $this->request->getPost('year_section'),
            'sex' => $this->request->getPost('sex'),
        ];

        if ($model->insert($data)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data insertion failed']);
        }
    }

    public function update()
    {
        $model = new SecuritechModel();
        $data = [
            'sn' => $this->request->getPost('sn'),
            'fname' => $this->request->getPost('fname'),
            'mname' => $this->request->getPost('mname'),
            'lname' => $this->request->getPost('lname'),
            'course' => $this->request->getPost('course'),
            'year_section' => $this->request->getPost('year_section'),
            'sex' => $this->request->getPost('sex'),
        ];

        $id = $this->request->getPost('id');

        if ($model->update($id, $data)) {
            return redirect()->to(base_url('admin_Students'))->with('message', 'Student updated successfully.');
        } else {
            return redirect()->to(base_url('admin_Students'))->with('message', 'Failed to update student.');
        }
    }

    protected $securitechModel;

    public function __construct()
    {
        $this->securitechModel = new SecuritechModel();
    }

    public function delete()
    {
        $id = $this->request->getPost('id');
        if ($id) {
            try {
                if ($this->securitechModel->delete($id)) {
                    return redirect()->to('/admin_Students')->with('message', 'Student deleted successfully');
                } else {
                    return redirect()->to('/admin_Students')->with('error', 'Failed to delete student');
                }
            } catch (\Exception $e) {
                return redirect()->to('/admin_Students')->with('error', 'Exception: ' . $e->getMessage());
            }
        } else {
            return redirect()->to('/admin_Students')->with('error', 'No ID provided');
        }
    }
    
    // logout for Admin
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }

    public function user()
    {
        return view('user/user_dashboards');
    }

    public function attendance()
    {
        return view('user/user_attendance');
    }
    public function reports_user()
    {
        return view('user/user_reports');
    }
    public function schedule_user()
    {
        return view('user/user_schedule');
    }
}
