@extends('layout.appstudent')

<div>
    <h1 class="bg-blue-200 font-bold text-center">Student Dashboard</h1>
</div>
<div class="mt-8 pt-4 border-t border-gray-100">
            <form method="POST" action="{{ route('student.logout') }}" id="logoutForm">
                @csrf
                <button id="logoutBtn" type="submit"
                    class="flex items-center w-full p-3 text-gray-600 rounded-lg hover:bg-gray-50 group transition-colors duration-200">
                    <div
                        class="flex items-center justify-center w-6 h-6 text-gray-500 group-hover:text-red-500 transition-colors duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3 4a1 1 0 011-1h6a1 1 0 010 2H5v10h5a1 1 0 110 2H4a1 1 0 01-1-1V4zm11.293 1.293a1 1 0 011.414 0L19 8.586a1 1 0 010 1.414l-3.293 3.293a1 1 0 11-1.414-1.414L15.586 11H9a1 1 0 110-2h6.586l-1.293-1.293a1 1 0 010-1.414z">
                            </path>
                        </svg>
                    </div>
                    <span class="ms-3 font-medium">Sign out</span>
                </button>
            </form>
        </div>
