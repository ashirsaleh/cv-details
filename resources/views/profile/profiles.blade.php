@include('partials.header')

<div class="min-h-screen bg-green-100 p-8">
    <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="flex">
                <div class="w-12 bg-gray-100 p-4 border-r border-gray-200 shadow-sm">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3
                         0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 
                         11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>

                <div class="flex-1 p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-3xl font-bold">All Profiles</h1>
                        <a href="{{ route('applicant.create') }}" 
                           class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                            Add New Profile
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($applicant as $applicant)
                        <div class="bg-white rounded-lg border border-gray-200 hover:border-green-300 hover:shadow-md transition-all">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                        <span class="text-xl font-bold text-green-600">
                                            {{ substr($applicant->name ?? 'U', 0, 1) }}
                                        </span>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="font-semibold text-lg">{{ $applicant->full_name ?? 'Unnamed Profile' }}</h3>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                                    <a href="{{ route('profile.show', $applicant->id) }}" 
                                       class="px-3 py-1.5 bg-green-600 text-white rounded hover:bg-green-700 transition-colors">
                                        <svg class="w-5 h-5 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 
                                            0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        View
                                    </a>
                                    <a href="{{ route('profile.edit', $applicant->id) }}" 
                                       class="px-3 py-1.5 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
                                        <svg class="w-5 h-5 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 
                                            2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('profile.destroy', $applicant->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                onclick="return confirm('Are you sure you want to delete this profile?')"
                                                class="px-3 py-1.5 bg-red-600 text-white rounded hover:bg-red-700 transition-colors">
                                            <svg class="w-5 h-5 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 
                                                0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>