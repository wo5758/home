<div class="updatepop" title="정보수정">
    <form action="<?php echo SITE_ROOT?>/app/pages/update.php" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">이름</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $member["username"]?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="useremail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="useremail" id="useremail" value="<?php echo $member["userid"]?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="userpass" class="col-sm-2 control-label">비밀번호</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="userpass" id="userpass" placeholder="비밀번호를 수정하시려면 새로운 비밀번호를 입력해 주세요.">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">수정하기</button>
            </div>
        </div>
    </form>
</div>