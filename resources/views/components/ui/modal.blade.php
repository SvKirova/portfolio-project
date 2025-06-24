<div id="modal-div" class="modal">
    <form class="modal-content" method="POST" id="delete-form">
        @csrf
        @method('DELETE')

        <div class="modal-container">
            <h1>Delete content</h1>
            <p>Are you sure you want to delete this?</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('modal-div').style.display='none'" class="modal-cancel">Cancel</button>
                <button type="submit" class="modal-delete">Delete</button>
            </div>
        </div>
    </form>
</div>
