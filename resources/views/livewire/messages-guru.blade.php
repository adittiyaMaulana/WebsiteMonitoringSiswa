<div>
    <nav class="navbar navbar-light" style="background: #323333">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">
                <img src="{{asset('image/logo.png')}}" alt="" width="50" height="50">
            </a> -->
            <h1 class="navbar-brand" style="color: white;">MOS Chating</h1>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">

            <!-- list user -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" style="background: #323333; color: white;">
                        Users
                    </div>

                    <div class="card-body chatbox p-0">

                        <!-- list usernya -->
                        <ul class="list-group list-group-flush">
                            {{-- not_seen berguna belom melihat status chat yg belom dibaca--}}

                            @foreach($users as $user)

                            {{-- untuk menghilangkan daftar data diri di list user --}}
                            @if($user->id !== auth()->id())

                            @php

                            $not_seen = App\Models\Message::where('user_id',$user->id)->where('receiver_id', auth()->id())->where('is_seen', false)->get() ?? null

                            @endphp

                            @if($user->role != 1 && $user->role == 2 && $user->role != 3)
                            <a wire:click="getUser({{ $user->id }})" class="text-dark link" style="text-decoration: none;">
                                <li class="list-group-item">
                                    <img class="img-fluid avatar" src="https://www.jobstreet.co.id/en/cms/employer/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="">

                                    <!-- status online -- ngaturnya ada di OnlineMiddleware-->
                                    @if($user->is_online == true)
                                    <i class="fa fa-circle text-success online-icon"></i>
                                    @endif

                                    {{ $user->name}}

                                    @if(filled(($not_seen)))
                                    <div class="badge badge-success rounded">
                                        {{ $not_seen->count() }}
                                    </div>
                                    @endif
                                </li>
                            </a>
                            @endif


                            @endif

                            @endforeach
                        </ul>

                    </div>
                </div>
            </div> <!-- akhir dari col-md-4-->

            <!-- chatings -->
            <div class="col-md-8">
                <div class="card">

                    <!-- munculin nama usernya pas di klik -->
                    <div class="card-header" style="background: #323333; color: white;">
                        @if(isset($sender))
                        {{$sender->name}}
                        @endif
                    </div>

                    <!-- buat pesan (munculin chatnya)-->
                    <!-- fungsi wire:poll="mountdata" adalah untuk ketika kita send messagenya, maka kita g perlu refresh pagenya buat munculin chat yg kita kirim -->

                    <div class="card-body message-box" wire:poll="mountdata">
                        <!-- buat ketika kita milih user maka chatnya bakal muncul semua sesuai user yg kita pilih -->
                        @if(filled($allmessages))
                        @foreach($allmessages as $mgs)

                        <!-- if else yg didalem class adalh untuk ui chat yg kita kirim disebelah kanan dan chat yg kita terima di sebelah kiri -->
                        <div class="single-message @if($mgs->user_id == auth()->id()) sent @else received @endif">
                            <p class="font-weight-bolder my-0">{{ $mgs->user->name }}</p> <!-- seting namanya ada di models Message -->
                            {{$mgs->message}}
                            <br><small class="text-muted w-100">Sent <em>{{ $mgs->created_at }}</em></small>
                        </div>
                        @endforeach
                        @endif

                    </div>
                    <div class="card-footer">
                        <form wire:submit.prevent="SendMessage" class="was-validated">
                            <div class="row">
                                <div class="col-md-8">
                                    <input class="form-control input shadow-none w-100 d-inline-block is-invalid" type="text" wire:model="message" placeholder="Masukan Pesan" required>
                                </div>

                                <div class="col-md-4">
                                    <button class="btn btn-primary d-inline-block w-100" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>