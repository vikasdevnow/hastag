<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
                <h4 class="title title-up">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default">Nice Button</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->
<!-- Mini Modal -->
<div class="modal fade modal-mini modal-primary modal-mini" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove text-white"></i>
                </button>
                <div class="modal-profile">
                    <i class="tim-icons icon-single-02"></i>
                </div>
            </div>
            <div class="modal-body">
                <p>Always have an access to your profile</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link btn-neutral">Back</button>
                <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Form Modal -->
<div class="modal fade modal-black" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove text-white"></i>
                </button>
                <div class="text-muted text-center ml-auto mr-auto">
                    <h3 class="mb-0">New Tag</h3>
                </div>
            </div>
            <div class="modal-body">

                <form action="{{route('store_hash')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <input class="form-control" id="setHash" placeholder="Hash" type="text" name="hash" required="" autocomplete="off">

                        </div>
                        <ul id="searchUI">
                          
                        </ul>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Write a caption..." name="description" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <a class="btn btn-primary btn-simple btn-round" id="addPhoto" href="javascript:void(0)" >
                                <i class="tim-icons icon-cloud-download-93"></i> Add Photo 
                            </a>
                            <input id="setImage" type="file" name="image[]" hidden="" accept="image/*">

                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div id="appendImage"></div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">Share</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function readURLCover(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#appendImage').html('');
                $('#appendImage').append('<img src="' + e.target.result + '" alt="Raised image" class="img-fluid rounded shadow-lg" id="imgCover" style="width: 100px;padding: 0px;"><br><span class="badge badge-danger" id="removeImage">Remove</span>');
                $('#addPhoto').hide();
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#addPhoto').on('click', function () {
        $('#setImage').trigger('click');
    });

    $("#setImage").change(function () {
        readURLCover(this);
    });

    $(document).on('click', '#removeImage', function () {
        $('#appendImage').html('');
        $("#setImage").val('');
        $('#addPhoto').show();
    });
    $("input#setHash").on({
        keydown: function (e) {
            if (e.which === 32)
                return false;
        },
        change: function () {
            this.value = this.value.trim().replace(/( )?#( )?/g, '');
        }
    });
</script>