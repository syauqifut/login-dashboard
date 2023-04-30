<header style="background-color: #fff;">
  <table style="padding:1px 24px 1px 24px;">
    <tr>
      <td colspan="2">
        <img src="assets/img/profile.png" alt="" width="92px">
      </td>
      <td colspan="5" align="left" style="padding-top:6px; padding-left:12px; line-height:40px;" width=100%>
        <b>welcome,</b><br>
        <h2><?= strtoupper($user['usernama']) ?></h2>
      </td>
      <td colspan="3" align="center">
        <div style="background-color: #d9d9d9; line-height:12px; padding:12px; width:240px; height:50px; border-radius:20px; margin-right:24px">
          <b>ROLE</b> <br>
          <h4><?= strtoupper($user['rolenama']) ?></h4>
        </div>
      </td>
      <td colspan="2">
        <a href="controller/logout.php"><img src="assets/img/logout_button.png" alt="" width="92px"></a>
      </td>
    </tr>
  </table>
</header>
