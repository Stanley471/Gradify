<?php
$title = 'Login - Gradify';
ob_start();
?>
<main class="min-h-screen bg-slate-50 px-4 py-10">
            <div class="bg-white rounded-xl shadow-lg border border-black/5 p-8">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-semibold text-slate-800 mb-2">Welcome Back</h1>
                    <p class="text-sm text-slate-500">Sign in to your Gradify account</p>
                </div>

                <form class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email"
                            class="w-full rounded-md border border-black/10 px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500/50 transition-all" />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-700 mb-2">
                            Password
                        </label>
                        <input type="password" id="password" name="password" required placeholder="Enter your password"
                            class="w-full rounded-md border border-black/10 px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500/50 transition-all" />
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-black/10 text-blue-500 focus:ring-blue-500/30">
                            <span class="ml-2 text-sm text-slate-600">Remember me</span>
                        </label>
                        <a href="#" class="text-sm text-blue-500 hover:text-blue-600 transition-colors">
                            Forgot password?
                        </a>
                    </div>

                    <button type="submit"
                        class="w-full py-3 rounded-md bg-gradient-to-r from-blue-500 to-green-500 text-white font-medium shadow-md shadow-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/30 transition-all duration-200 transform hover:scale-[1.02]">
                        Sign In
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-slate-500">
                        Don't have an account?
                        <a href="signup.html" class="text-blue-500 hover:text-blue-600 font-medium transition-colors">
                            Sign up
                        </a>
                    </p>
                </div>
            </div>

            <!-- Footer Links -->
            <div class="mt-8 text-center">
                <div class="flex justify-center space-x-6 text-xs text-slate-400">
                    <a href="#" class="hover:text-slate-600 transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-600 transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-slate-600 transition-colors">Support</a>
                </div>
            </div>
        </div> </main>

<?php
$content = ob_get_clean();
include 'public/views/layout.php';
?>