
<div class="flex items-center justify-center h-screen bg-gray-900 w-screen">
    <div id="login-form" class="bg-gray-900 h-screen w-screen">
        <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
            <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
                <div class="flex flex-col w-full md:w-1/2 p-4">
                    <div class="flex flex-col flex-1 justify-center mb-8">
                        <h1 class="text-4xl text-center font-thin">Welcome Back</h1>
                        <div class="w-full mt-4">
                            <form class="form-horizontal w-3/4 mx-auto" action="" method="POST">
                                <div class="flex flex-col mt-4">
                                    <input type="text" class="flex-grow h-8 px-2 border rounded border-grey-400" name="log_email" placeholder="Email">
                                </div>
                                <div class="flex flex-col mt-4">
                                    <input type="password" class="flex-grow h-8 px-2 rounded border border-grey-400" name="log_password" required placeholder="Password">
                                </div>
                                <div class="flex items-center mt-4">
                                    <input type="checkbox" name="remember" id="remember" class="mr-2"> <label for="remember" class="text-sm text-grey-dark">Remember Me</label>
                                </div>
                                <div class="flex flex-col mt-8">
                                    <button name="submit_l" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                                Don't have an account? <a href="index.php?page=register" id="sign-up" class="cursor-pointer text-indigo-600 hover:text-indigo-800">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block md:w-1/2 rounded-r-lg" style="background: url('https://images.unsplash.com/photo-1515965885361-f1e0095517ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3300&q=80'); background-size: cover; background-position: center center;"></div>
            </div>
        </div>
    </div>
</div>