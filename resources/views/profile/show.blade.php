
@include('partials.header')

    <div class="min-h-screen bg-green-100 p-8">
      <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
        <div class="flex">
          <div class="w-12 bg-gray-100 p-4 border-r border-gray-200 shadow-sm">
          </div>

          <div class="flex-1 p-8">
            <div class="grid grid-cols-12 gap-8">
              <div class="col-span-4">
                <h1 class="text-3xl font-bold mb-2">{{$applicant->full_name}}</h1>
                <p class="text-green-600 mb-4">{{$applicant->email}}</p>
                <p class="text-green-600 mb-4">{{$applicant->phone_number}}</p>
              </div>

              <div class="col-span-8">
                <div class="mb-8">
                  <h2 class="text-xl font-semibold mb-2 flex items-center gap-2">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 13.255A23.931 23.931
                       0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2
                        0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Education
                  </h2>
                  <div class="space-y-6">
                    @foreach ($applicant->education as $edu)
                        <div class="border-l-2 border-green-200 pl-4">
                            <div class="text-sm text-green-600 mb-1">{{$edu->graduation_year}}</div>
                            <h3 class="font-medium mb-1">{{$edu->degree}}</h3>
                            <p class="text-gray-600">{{$edu->institution_name}}</p>
                        </div>
                    @endforeach
                    
                  </div>
                </div>

                <div>
                  <h2 class="text-xl font-semibold mb-2 mt-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 14l9-5-9-5-9 5 9 5z" />
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 14l9-5-9-5-9 5 9 5zm0 0L3 9m9 5l9-5" />
                    </svg>
                    Experience
                  </h2>
                  <div class="space-y-6">
                    @foreach ($applicant->workExperiences as $exp)
                        <div class="border-l-2 border-green-200 pl-4">
                            <div class="text-sm text-green-600 mb-1">{{$exp->duration}}</div>
                            <h3 class="font-medium mb-1">{{$exp->role}}</h3>
                            <p class="text-gray-600 mb-2">{{$exp->company_name}}</p>
                            {{-- <p class="text-gray-600">Lead development team in creating innovative web solutions.</p> --}}
                        </div>
                    @endforeach
                  </div>
                </div>

                <div>
                  <h2 class="text-xl font-semibold mt-6 mb-2 flex items-center gap-2">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 14l9-5-9-5-9 5 9 5z" />
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 14l9-5-9-5-9 5 9 5zm0 0L3 9m9 5l9-5" />
                    </svg>
                    Skills
                  </h2>
                  <div class="space-y-2">
                    <div class="border-l-2 border-green-200 pl-4">
                        @foreach ($applicant->skills as $skill)
                            <div class="text-sm text-green-600 mb-1">{{$skill->name}}</div>
                        @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-8 flex gap-4">
              <a href="{{ route('profile.edit', $applicant->id)}}" class="px-6 py-2 bg-gray-900 text-white rounded-lg 
                hover:bg-gray-800 flex items-center gap-2">
                Edit Profile
              </a>
              <a href="{{ url('/') }}" 
                            class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                            Go Home
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>