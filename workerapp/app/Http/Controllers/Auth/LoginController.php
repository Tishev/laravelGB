namespace App\Http\Controllers\Auth;

use App\Events\LoginEvent;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	@@ -39,4 +41,9 @@ public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {
        event(new LoginEvent($user));
    }
}