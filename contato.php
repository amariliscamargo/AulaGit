<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
		<div class="col-md-8 col-md-offset-1" style="margin-top:10em;">
			<form class="form-horizontal" role="form" method="post" action="index.php">
			    <div class="form-group">
			        <label for="name" class="col-sm-2 control-label">Nome</label>
			        <div class="col-sm-10">
			            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
			        </div>
			    </div>
			    <div class="form-group">
			        <label for="email" class="col-sm-2 control-label">Email</label>
			        <div class="col-sm-10">
			            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
			        </div>
			    </div>
			    <div class="form-group">
			        <label for="name" class="col-sm-2 control-label">Telefone</label>
			        <div class="col-sm-10">
			            <input type="text" class="form-control" id="name" name="name" placeholder="Telefone" value="">
			        </div>
			    </div>
			    <div class="form-group">
			        <label for="message" class="col-sm-2 control-label">Menssagem</label>
			        <div class="col-sm-10">
			            <textarea class="form-control" rows="4" name="message"></textarea>
			        </div>
			    </div>
			    <div class="form-group">
			        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
			        <div class="col-sm-10">
			            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="col-sm-10 col-sm-offset-2">
			            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
			        </div>
			    </div>
			</form>
			<div style="margin-top:5em;"></div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>