<?php 
    namespace App\Services;

    use Illuminate\Http\Request;

    class DashboardService {
        public function index(){
            return view('dashboard');
        }
    }
?>
