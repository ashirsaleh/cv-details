@include('partials.header')

<div class="min-h-screen bg-green-100 p-8">
    <form action="{{ route('applicant.store') }}" method="POST" class="max-w-5xl mx-auto">
        @csrf
        
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="flex">
                <div class="w-12 bg-gray-100 p-4 border-r border-gray-200 shadow-sm">
                </div>

                <div class="flex-1 p-8">
                    <div class="grid grid-cols-12 gap-8">
                        <div class="col-span-4">
                            <h1 class="text-3xl font-bold mb-6">Create Profile</h1>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">Full Name</label>
                                    <input type="text" name="full_name" value="{{ old('full_name') }}" 
                                        class="w-full rounded-md border-gray-300 shadow-sm 
                                        focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                    @error('full_name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium mb-1">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="w-full rounded-md border-gray-300 shadow-sm 
                                        focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium mb-1">Phone Number</label>
                                    <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                                        class="w-full rounded-md border-gray-300 shadow-sm 
                                        focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                    @error('phone_number')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-span-8">
                            <div class="mb-8">
                                <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 
                                        00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Education
                                </h2>

                                <div id="education-container" class="space-y-6">
                                    <div class="border-l-2 border-green-200 pl-4 space-y-3">
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block text-sm font-medium mb-1">Degree</label>
                                                <input type="text" name="education[0][degree]" 
                                                    class="w-full rounded-md border-gray-300 shadow-sm 
                                                    focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium mb-1">Graduation Year</label>
                                                <input type="text" name="education[0][graduation_year]" 
                                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 
                                                    focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium mb-1">Institution</label>
                                            <input type="text" name="education[0][institution_name]" 
                                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 
                                                focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                        </div>
                                    </div>
                                </div>

                                <button type="button" onclick="addEducation()" 
                                    class="mt-4 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                    Add Education
                                </button>
                            </div>
                            <div class="mb-8">
                                <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0L3 9m9 5l9-5" />
                                    </svg>
                                    Experience
                                </h2>

                                <div id="experience-container" class="space-y-6">
                                    <div class="border-l-2 border-green-200 pl-4 space-y-3">
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block text-sm font-medium mb-1">Role</label>
                                                <input type="text" name="work_experiences[0][role]" 
                                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 
                                                    focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium mb-1">Duration</label>
                                                <input type="text" name="work_experiences[0][duration]" 
                                                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 
                                                    focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium mb-1">Company</label>
                                            <input type="text" name="work_experiences[0][company_name]" 
                                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 
                                                focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                        </div>
                                    </div>
                                </div>

                                <button type="button" onclick="addExperience()" 
                                    class="mt-4 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                    Add Experience
                                </button>
                            </div>

                            <!-- Skills Section -->
                            <div>
                                <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0L3 9m9 5l9-5" />
                                    </svg>
                                    Skills
                                </h2>

                                <div id="skills-container" class="space-y-4">
                                    <div class="border-l-2 border-green-200 pl-4 flex items-center gap-4">
                                        <input type="text" name="skills[0][name]" 
                                            class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring 
                                            focus:ring-green-200 focus:ring-opacity-50"
                                            placeholder="Skill">
                                    </div>
                                </div>

                                <button type="button" onclick="addSkill()" 
                                    class="mt-4 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                    Add Skill
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex gap-4">
                        <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                            Create Profile
                        </button>
                        <a href="{{ url('/') }}" 
                            class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    let educationCount = 1;
    let experienceCount = 1;
    let skillCount = 1;

    function addEducation() {
        const container = document.getElementById('education-container');
        
        const template = `
            <div class="border-l-2 border-green-200 pl-4 space-y-3">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Degree</label>
                        <input type="text" name="education[${educationCount}][degree]" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Graduation Year</label>
                        <input type="text" name="education[${educationCount}][graduation_year]" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Institution</label>
                    <input type="text" name="education[${educationCount}][institution_name]" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                </div>
                <button type="button" onclick="this.closest('.border-l-2').remove()" 
                    class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                    Remove
                </button>
            </div>
        `;
        
        container.insertAdjacentHTML('beforeend', template);
        educationCount++;
    }

    function addExperience() {
        const container = document.getElementById('experience-container');
        const template = `
            <div class="border-l-2 border-green-200 pl-4 space-y-3">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Role</label>
                        <input type="text" name="work_experiences[${experienceCount}][role]" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Duration</label>
                        <input type="text" name="work_experiences[${experienceCount}][duration]" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Company</label>
                    <input type="text" name="work_experiences[${experienceCount}][company_name]" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                </div>
                <button type="button" onclick="this.closest('.border-l-2').remove()" 
                    class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                    Remove
                </button>
            </div>
        `;

        container.insertAdjacentHTML('beforeend', template);
        experienceCount++;
    }

    function addSkill() {
        const container = document.getElementById('skills-container');
        
        const template = `
            <div class="border-l-2 border-green-200 pl-4 flex items-center gap-4">
                <input type="text" name="skills[${skillCount}][name]" 
                    class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                    placeholder="Skill">
                <button type="button" onclick="this.closest('.border-l-2').remove()" 
                    class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                    Remove
                </button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', template);
        skillCount++;
    }
</script>
