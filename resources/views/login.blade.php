@extends('layout')

@section('content')
<div >
    <!-- Sign In Section -->
    <div
      class="flex items-center justify-center m-0 backdrop-blur-md relative h-screen"
    >
      <div class="min-h-auto flex items-center justify-center shadow-xl">
        <div class="bg-white p-8 rounded shadow-2xl w-96">
          <h2 class="text-3xl font-semibold mb-6 text-center">
            Sign in to your account
          </h2>
          <form>
            <div class="mb-4">
              <label
                for="email"
                class="block text-gray-700 text-sm font-bold mb-2"
                >Email or Phone Number</label
              >
              <input
                type="text"
                id="email"
                name="email"
                class="w-full border rounded px-3 py-2"
              />
            </div>
            <div class="mb-4">
              <label
                for="password"
                class="block text-gray-700 text-sm font-bold mb-2"
                >Password</label
              >
              <input
                type="password"
                id="password"
                name="password"
                class="w-full border rounded px-3 py-2"
              />
            </div>
            <a
              href="/adminDashboard"
              class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 w-full text-center flex justify-center items-center"
            >
              Log In
            </a>
            <div class="text-center mt-4">
              <a href="#" class="text-green-700">Forgot Password?</a>
            </div>
          </form>
          <hr class="my-6 border-t border-gray-300" />
          <div class="text-center">
            <p class="text-sm text-gray-600">
              Don't have an account?
              <button id="openModalBtn" class="text-green-600">
                Sign Up
              </button>
            </p>
          </div>
        </div>
      </div>

      <!-- Signup Modal -->
      <div
        id="signupModal"
        class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center"
      >
        <div
          class="bg-white p-8 rounded shadow-md grid grid-cols-3 gap-4 w-full max-w-3xl"
        >
          <h2 class="col-span-3 text-2xl font-semibold mb-6">
            Barangay Health Center Signup Form
          </h2>
          <form action="process_signup.php" method="post" class="col-span-3">
            <div
              class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2"
            >
              <div>
                <label
                  for="lastname"
                  class="block text-sm font-medium text-gray-600"
                  >Last Name:</label
                >
                <input
                  type="text"
                  id="lastname"
                  name="lastname"
                  required
                  class="mt-1 p-2 w-full border rounded-md"
                />
              </div>
              <div>
                <label
                  for="firstname"
                  class="block text-sm font-medium text-gray-600"
                  >First Name:</label
                >
                <input
                  type="text"
                  id="firstname"
                  name="firstname"
                  required
                  class="mt-1 p-2 w-full border rounded-md"
                />
              </div>
            </div>
            <div
              class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2"
            ></div>
            <div
              class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2"
            >
              <div>
                <label
                  for="gender"
                  class="block text-sm font-medium text-gray-600"
                  >Gender:</label
                >
                <select
                  name="gender"
                  id="gender"
                  required
                  class="mt-1 p-2 w-full border rounded-md"
                >
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div>
                <label
                  for="birthdate"
                  class="block text-sm font-medium text-gray-600"
                  >Date of Birth:</label
                >
                <input
                  type="date"
                  id="birthdate"
                  name="birthdate"
                  required
                  class="mt-1 p-2 w-full border rounded-md"
                />
              </div>
            </div>
            <div
              class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2"
            ></div>
            <div
              class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2"
            >
              <div>
                <label
                  for="contact"
                  class="block text-sm font-medium text-gray-600"
                  >Contact Number:</label
                >
                <input
                  type="tel"
                  id="contact"
                  name="contact"
                  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                  placeholder="Format: 123-456-7890"
                  required
                  class="mt-1 p-2 w-full border rounded-md"
                />
              </div>
              <div>
                <label
                  for="email"
                  class="block text-sm font-medium text-gray-600"
                  >Email:</label
                >
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  class="mt-1 p-2 w-full border rounded-md"
                />
              </div>
            </div>
            <div
              class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2"
            ></div>
            <button
              type="submit"
              class="bg-green-500 text-white p-2 rounded-md w-full hover:bg-green-600"
            >
              Submit
            </button>
          </form>
          <div class="col-span-3 mt-4 text-center text-sm text-gray-600">
            <p>
              Already have an account?
              <a href="/login" class="text-green-700 hover:underline"
                >Login</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection
<script>
    // JavaScript to show/hide modal
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const signupModal = document.getElementById('signupModal');

    openModalBtn.addEventListener('click', () => {
      signupModal.classList.remove('hidden');
    });

    closeModalBtn.addEventListener('click', () => {
      signupModal.classList.add('hidden');
    });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>