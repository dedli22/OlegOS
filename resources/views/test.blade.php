<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>


  <form class="flex items-center space-x-6 text-red-500">
    <div class="shrink-0">
      <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
    </div>
    <label class="block">
      <span class="sr-only">Choose profile photo</span>
      <input type="file" class="block w-full text-sm text-slate-500
        file:mr-4 file:py-2 file:px-4
        file:rounded-full file:border-0
        file:text-sm file:font-semibold
        file:bg-violet-50 file:text-violet-700
        hover:file:bg-violet-100
      "/>
    </label>
  </form>


  <br>

  <div class="bg-white dark:bg-slate-900 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
    <div>
      <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
      </span>
    </div>
    <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Writes Upside-Down</h3>
    <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
      The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space.
    </p>
  </div>


</body>
</html>