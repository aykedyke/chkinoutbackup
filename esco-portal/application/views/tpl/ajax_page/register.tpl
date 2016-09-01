<div class="dj_login">
        {if $is_loggedin == ''}

      <form action="{$base_url}" action="javascript:;" method="POST" id="loginForm">
      <h3>Log in</h3>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="strUser" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="strLogInPassword" required>
        </div>
        <div class="form-group">
          <input type="hidden" name="strRememberMe" value="0">
          <input type="checkbox" value="1" name="strRememberMe"><span>&nbsp;</span>Remember me?</label>
          <label><a href="{$base_url}home/forgotpass">Forgot Password?</a></label>

      <input type="submit" class="btn btn-primary btn-block btn-sm" id="dj_btn_login" value="Log in">
      <button type="button" class="btn btn-fb btn-block btn-sm" id="dj_btn_login">Log in with Facebook</button>
      </form>
      <span>Not yet a member</span>
      <a href="register" type="button" class="btn btn-reg btn-block btn-sm" id="dj_btn_login">Register</a>
      </div>
    {else}
      <h4>Welcome {$is_loggedin['strLastName']} , {$is_loggedin['strFirstName']}</h4>
      <a onClick="viewTransactions('{$is_loggedin["intUserID"]}')" type="button" class="btn btn-fb btn-block btn-sm" id="dj_btn_login">My Transaction</a>
      <a href="{$base_url}bidding" type="button" class="btn btn-fb btn-block btn-sm" id="dj_btn_login">Bid now?</a>
      <a href="{$base_url}?logout" type="button" class="btn btn-reg btn-block btn-sm" id="dj_btn_login">Logout?</a>


    {/if}
          </div>
