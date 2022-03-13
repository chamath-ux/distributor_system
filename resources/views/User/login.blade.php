<x-layout >
    <x-form-card>

        <form method='post' action='/login'  class=''>
            @csrf
           <div class='grid-cols-3'>
               <label>Email</label>
            <input type='email' name='email'>
           </div>
           <div>
            <label>Password</label>
            <input type='password' name='password'>
           </div>
           <x-form-submit-button> Login </x-form-submit-button>
        </form>

    </x-form-card>

</x-layout >

