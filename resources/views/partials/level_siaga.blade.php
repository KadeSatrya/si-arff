
<!-- Modal -->
<div class="modal fade" id="level" tabindex="-1" role="dialog" aria-labelledby="level"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="level">Level Siaga</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('aircraft.create') }}" method="post">
                @csrf
                <div class="form-group">
                    <select style="border-style: groove" class="form-control" id="telepon_ambulan"
                        name="telepon_ambulan">
                        <option value=1>1 Local Standby</option>
                        <option value=2>2 Full Emergency</option>
                        <option value=3>3 Aircraft Accident</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {{-- <a class="btn btn-success">+</a> --}}
            <button type="submit" class="btn btn-primary"  href="/pesawat/createData">Save changes</button>
        </div>
        </form>
    </div>
</div>
</div>