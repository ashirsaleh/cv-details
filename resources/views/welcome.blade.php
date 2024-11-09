@include('partials.header')
<div class="min-h-screen bg-green-100 p-8">
    <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="flex">
                <div class="w-12 bg-gray-100 p-4 border-r border-gray-200 shadow-sm">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-li
                        necap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <div class="flex-1 p-8">
                    <div class="grid grid-cols-12 gap-8">
                        <div class="col-span-12">
                            <div class="flex items-center justify-between mb-6">
                                <h1 class="text-3xl font-bold">Hello! Welcome</h1>
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <a href="{{ route('applicant.create') }}" 
                                    class="flex items-center gap-4 p-6 bg-white rounded-lg border border-gray-200 hover:border-green-300 hover:shadow-md transition-all">
                                    <div class="p-3 bg-green-100 rounded-full">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-lg">Add New Profile</h3>
                                        <p class="text-gray-600">Keep information up to date</p>
                                    </div>
                                </a>
                                <a href="{{route('profiles.index')}}" 
                                    class="flex items-center gap-4 p-6 bg-white rounded-lg border border-gray-200 hover:border-green-300 hover:shadow-md transition-all">
                                    <div class="p-3 bg-green-100 rounded-full">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-lg">Browse Profiles</h3>
                                        <p class="text-gray-600">Find all profiles here</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>