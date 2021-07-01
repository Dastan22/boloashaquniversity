<html>

<style>
	
.avatar {
    height: 50px;
    width: 50px;
}
.list-group-item:hover, .list-group-item:focus {
    background: rgba(24,32,23,0.37);
    cursor: pointer;
}

.received {
    margin-right: auto !important;
}
.sent {
    margin-left: auto !important;
    background :#3490dc;
    color: white!important;
}
.sent small {
    color: white !important;
}
.link:hover {
    list-style: none !important;
    text-decoration: none;
}
.online-icon {
    font-size: 11px !important;
} 
@livewireStyles

@livewireScripts

</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<body>

<div>
    <div class="row justify-content-center">
      
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Users
                    </div>
                    <div class="card-body chatbox p-0">
                        <ul class="list-group list-group-flush">
                          @foreach($users as $user)
                                <a wire:click="getUser({{$user->id}})"  class="text-dark link">
                                    <li class="list-group-item">
                                        <img class="img-fluid avatar" src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png">
                                         <i class="fa fa-circle text-success online-icon"></i> {{$user->name}}
                                       
                                            <div class="badge badge-success rounded"> 20 </div>
                                    </li>
                                </a>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
 
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                     @if(isset($sender)) {{$sender->name}}   @endif
                </div>
                <div class="card-body message-box" >
                     
                            <div class="single-message ">
                                <p class="font-weight-bolder my-0">name</p>
                               message
                                <br><small class="text-muted w-100">Sent <em>10-1-2021</em></small>
                            </div>
                        
                </div>
                 
                <div class="card-footer">
                    <form >
                        <div class="row">
                            <div class="col-md-8">
                                <input wire:model="message" class="form-control input shadow-none w-100 d-inline-block" placeholder="Type a message" required>
                            </div>

                            <div class="col-md-4">
                                <button class="btn btn-primary d-inline-block w-100"><i class="far fa-paper-plane"></i> Send</button>
                            </div>
                        </div>
                    </form>
                </div>
             
            </div>
        </div>
    </div>
</div>

</body>
</html>
