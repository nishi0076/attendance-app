<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <section class="text-gray-600 body-font relative">
                        <form method="post" action="{{ route('register.store') }}">
                            @csrf
                        <div class="container px-5 mx-auto">
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">会員登録</font>
                                    </font>
                                </h1>
                            </div>
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">


                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-600">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">名前</font>
                                                </font>
                                            </label>
                                            <input type="text" id="name" name="name"
                                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>


                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="email" class="leading-7 text-sm text-gray-600">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">メールアドレス</font>
                                                </font>
                                            </label>
                                            <input type="email" id="email" name="email"
                                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>


                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="password" class="leading-7 text-sm text-gray-600">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">パスワード</font>
                                                </font>
                                            </label>
                                            <input type="password" id="password" name="password"
                                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>


                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="confirm" class="leading-7 text-sm text-gray-600">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">確認用パスワード</font>
                                                </font>
                                            </label>
                                            <input type="password" id="password_confirmation" name="password_confirmation"  required
                                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>


                                    <div class="p-2 w-full">
                                        <button
                                            class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">会員登録</font>
                                            </font>
                                        </button>
                                    </div>


                                    <div class="p-2 w-full pt-8 mt-8 border-gray-200 text-center">
                                        <p class="leading-normal my-5">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">アカウントをお持ちの方はこちらから</font>
                                            </font>
                                        </p>

                                        <a href="login" class="text-indigo-500">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">ログイン</font>
                                            </font>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
