<div class="bg-white p-6 rounded-lg shadow-md max-w-4xl mx-auto">
  <h2 class="text-2xl font-bold mb-6">Security</h2>
  
  <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6">
    <div class="flex items-center">
      <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
      </svg>
      <p class="font-semibold">You have successfully logout everyone</p>
    </div>
    <p class="mt-2">Since now, everyone will need to login again to their account.</p>
  </div>
  
  <div class="mb-6">
    <div class="flex items-center justify-between mb-2">
      <div>
        <h3 class="font-semibold">Enforce two-step verification</h3>
        <p class="text-gray-500 text-sm">Require a security key or code in addition to password.</p>
      </div>
      <label class="switch">
        <input type="checkbox" class="sr-only peer">
        <span class="slider bg-gray-200 peer-checked:bg-purple-600 rounded-full w-14 h-7 transition-all duration-300 ease-in-out"></span>
      </label>
    </div>
  </div>
  
  <div class="mb-6">
    <div class="flex items-center justify-between">
      <div>
        <h3 class="font-semibold">Logout everyone</h3>
        <p class="text-gray-500 text-sm">This will require everyone to login into the system.</p>
      </div>
      <button class="bg-white text-gray-700 border border-gray-300 rounded px-4 py-2 hover:bg-gray-50">Logout everyone</button>
    </div>
  </div>
  
  <div>
    <h3 class="font-semibold mb-2">Current sessions</h3>
    <p class="text-gray-500 text-sm mb-4">These devices are currently signed in to people's accounts.</p>
    
    <div class="flex mb-4">
      <button class="bg-gray-100 text-gray-700 rounded px-3 py-1 mr-2">All people ▼</button>
      <button class="bg-gray-100 text-gray-700 rounded px-3 py-1 mr-2">All browsers ▼</button>
      <button class="bg-gray-100 text-gray-700 rounded px-3 py-1">All locations ▼</button>
    </div>
    
    <table class="w-full">
      <thead class="bg-gray-50">
        <tr>
          <th class="text-left py-2 px-4">Person</th>
          <th class="text-left py-2 px-4">Browser</th>
          <th class="text-left py-2 px-4">Location</th>
          <th class="text-left py-2 px-4">Most recent activity</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-t">
          <td class="py-2 px-4 flex items-center">
            <img src="https://i.pravatar.cc/32?img=1" alt="Olivia Rhye" class="w-8 h-8 rounded-full mr-2">
            Olivia Rhye
          </td>
          <td class="py-2 px-4">Chrome on Mac OS X</td>
          <td class="py-2 px-4">United Kingdom</td>
          <td class="py-2 px-4">Current session</td>
          <td class="py-2 px-4 text-right">...</td>
        </tr>
        <!-- Add more rows for other users -->
      </tbody>
    </table>
  </div>
</div>

<style>
  .switch {
    position: relative;
    display: inline-block;
    width: 56px;
    height: 28px;
  }
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }
  .slider:before {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
  }
  input:checked + .slider:before {
    transform: translateX(26px);
  }
</style>