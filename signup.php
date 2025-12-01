<?php
$title = 'Sign Up - Gradify';
ob_start();
?>

    <main class="min-h-screen bg-gradient-to-br from-slate-50 to-white flex items-center justify-center px-6 py-12">
        <div class="w-full max-w-md">
            <!-- Sign Up Form Card -->
            <div class="bg-white rounded-xl shadow-lg border border-black/5 p-8">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-semibold text-slate-800 mb-2">Create Account</h1>
                    <p class="text-sm text-slate-500">Join Gradify to start tracking your grades</p>
                </div>

                <form class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-slate-700 mb-2">
                                First Name
                            </label>
                            <input type="text" id="firstName" name="firstName" required placeholder="John"
                                class="w-full rounded-md border border-black/10 px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500/50 transition-all" />
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-slate-700 mb-2">
                                Last Name
                            </label>
                            <input type="text" id="lastName" name="lastName" required placeholder="Doe"
                                class="w-full rounded-md border border-black/10 px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500/50 transition-all" />
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" required placeholder="john.doe@example.com"
                            class="w-full rounded-md border border-black/10 px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500/50 transition-all" />
                    </div>

                    <div>
                        <label for="studentId" class="block text-sm font-medium text-slate-700 mb-2">
                            Student ID (Optional)
                        </label>
                        <input type="text" id="studentId" name="studentId" placeholder="12345678"
                            class="w-full rounded-md border border-black/10 px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500/50 transition-all" />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-700 mb-2">
                            Password
                        </label>
                        <input type="password" id="password" name="password" required
                            placeholder="Create a strong password"
                            class="w-full rounded-md border border-black/10 px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500/50 transition-all" />
                    </div>

                    <div>
                        <label for="confirmPassword" class="block text-sm font-medium text-slate-700 mb-2">
                            Confirm Password
                        </label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required
                            placeholder="Confirm your password"
                            class="w-full rounded-md border border-black/10 px-4 py-3 outline-none focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500/50 transition-all" />
                    </div>

                    <div class="flex items-start">
                        <input type="checkbox" id="terms" required
                            class="mt-1 rounded border-black/10 text-blue-500 focus:ring-blue-500/30">
                        <label for="terms" class="ml-2 text-sm text-slate-600">
                            I agree to the
                            <a href="#" class="text-blue-500 hover:text-blue-600 transition-colors">Terms of Service</a>
                            and
                            <a href="#" class="text-blue-500 hover:text-blue-600 transition-colors">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full py-3 rounded-md bg-gradient-to-r from-blue-500 to-green-500 text-white font-medium shadow-md shadow-indigo-500/20 hover:shadow-lg hover:shadow-indigo-500/30 transition-all duration-200 transform hover:scale-[1.02]">
                        Create Account
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-slate-500">
                        Already have an account?
                        <a href="login.html" class="text-blue-500 hover:text-blue-600 font-medium transition-colors">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>

<?php 
$content = ob_get_clean();
include 'public/views/layout.php';
?>