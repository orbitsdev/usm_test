
<style>
.pa{
    padding: 8px;
    margin-bottom: 10px;
    border: 2px solid black;


}

</style>
<div>

    
    
    @foreach ($users as $user)
    <div class="pa">
        
        <p> {{$user->name ??''}} {{$user->email ?? ''}}</p>
    </div>
        
        @endforeach
</div>