public function index()
{
    // ...existing code...
    $user = auth()->user();
    $isAdmin = in_array($user->email, config('admins.admins'));
    return view('dashboard', compact('isAdmin'));
}
