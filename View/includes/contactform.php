<form method="post">
    <div class="form-group">
        <label for="inputName">Name:<sup>*</sup></label>
        <input required class="form-control" type="text" name="name" id="inputName">
    </div>
    <div class="form-group">
        <label for="inputTitle">Title:<sup>*</sup></label>
        <input  required class="form-control" type="text" name="title" id="inputTitle">
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea required class="form-control" name="message" id="inputComment" rows="5" cols="30">

        </textarea></div>
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Send</button>
    </div>
</form>