namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $tasks = $user->tasks;

        return view('tasks.index', compact('tasks'));
    }
}