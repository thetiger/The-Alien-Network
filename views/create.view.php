<div class="container-fluid col-xs-12 col-md-12 maincontent">

    <div class="row">

        <div class="container">

            <div class="row">


                <div class="col-md-6 whitetext blackbg" style="margin-left:10px;">
                    &nbsp;
                    <h3>Create a topic</h3>
                    <form role="form" method="post" action="create">
                        <fieldset class="form-group">
                            <label for="topicname">Topic name:</label>
                            <input type="text" class="form-control" id="topicname" placeholder="Topic Name" name="topicname">
                            <?php if(!empty($errTitle)){echo "<p class='text-danger'>$errTitle</p>";}?>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleSelect2">Category (choose most relevant)</label>
                            <?php echo stories::getcats2(); ?>
                            <?php if(!empty($errCat)){echo "<p class='text-danger'>$errCat</p>";}?>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleTextarea">Topic Content</label>
                            <textarea class="form-control" id="storycontent" rows="10" name="storycontent"></textarea>
                            <?php if(!empty($errStorycontent)){echo "<p class='text-danger'>$errStorycontent</p>";}?>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="youtubevid">Youtube video id:</label>
                            <input type="text" class="form-control" id="youtubevid" placeholder="example: MwpMEbgC7DA" name="youtubevid">
                            <small class="text-muted">This is mandatory, failure to input will result in a default video being shown. You can still add videos using our 'insert video' feature to insert directly into your post.</small>
                            <?php if(!empty($errVideo)){echo "<p class='text-danger'>$errVideo</p>";}?>
                        </fieldset>
                        <button type="submit" class="btn btn-primary" name="createtopic">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">

                </div>



            </div>

        </div>

    </div>


</div>

</div>

</div>

</div>

</div>