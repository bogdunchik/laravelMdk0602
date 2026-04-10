namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('dynamic');
    }

    public function handleForm(Request $request)
    {
        $data = $request->all();
        return view('result', ['data' => $data]);
    }
    public function showRegisterForm()
 {
    return view('register');
 }
 public function handleRegister(Request $request)
 {
    $data = $request->except(['password', 'email']);
    return view('register_result', ['data' => $data]);
 }
 public function showParams($param1, $param2)
 {
    return view('params', ['param1' => $param1, 'param2' => $param2]);
 }
 public function method(Request $request)
 {
    $method = $request->method();
    if ($request->isMethod('get')) {
        return view('method', ['method' => $method]);
    } elseif ($request->isMethod('post')) {
        $numbers = $request->only(['num1', 'num2']);
        $sum = (int)$numbers['num1'] + (int)$numbers['num2'];
        return view('result', ['sum' => $sum]);
    }
 }


}
