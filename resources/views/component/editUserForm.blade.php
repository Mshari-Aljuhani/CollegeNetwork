<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Edit information
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update profile information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{route('user.update')}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control mb-3" id="floatingName" placeholder="Name" value="{{Auth::user()->name}}">
                        <label for="floatingName">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control mb-3" id="floatingEmail" placeholder="Email" value="{{Auth::user()->email}}">
                        <label for="floatingEmail">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" name="phoneNumber" class="form-control mb-3" id="floatingPhoneNumber" placeholder="Phone Number" value="{{Auth::user()->phoneNumber}}">
                        <label for="floatingPhoneNumber">Phone Number</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>

                <hr>
                <div class="userInfo-resetPass pb-3">
                    <button id="showForm" type="button" class="btn btn-outline-danger" onclick="showForm()" style="display:inline ;"> Reset password? </button>
                    <form id="resetPassForm" action="{{route('user.password.update')}}" method="post" style="display: none">
                        @csrf
                        @method('patch')
                        <div class="form-floating" style="margin-bottom: 20px">
                            <input type="password" name="current_password" class="form-control" id="floatingCurrent_Password" placeholder="Current Password" required>
                            <label for="floatingCurrent_Password">Current Password</label>
                        </div>

                        <div class="form-floating " style="margin-bottom: 10px">
                            <input type="password" name="new_password" class="form-control" id="floatingNew_Password" placeholder="New Password" required>
                            <label for="floatingNew_Password">New Password</label>
                        </div>
                        <div class="form-floating " style="margin-bottom: 20px">
                            <input type="password" name="confirm_password" class="form-control " id="floatingConfirm_Password" placeholder="Confirm password" required>
                            <label for="floatingConfirm_Password">Confirm password</label>
                        </div>
                        <button type="submit" class="btn btn-outline-warning">Reset password</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showForm() {
        document.getElementById('resetPassForm').style.display = 'block'
        document.getElementById('showForm').style.display = 'none';
    }
</script>
