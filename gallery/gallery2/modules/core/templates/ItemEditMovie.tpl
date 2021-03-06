{*
 * $Revision: 15342 $
 * If you want to customize this file, do not edit it directly since future upgrades
 * may overwrite it.  Instead, copy it into a new directory called "local" and edit that
 * version.  Gallery will look for that file first and use it if it exists.
 *}
<div class="gbBlock">
  <p class="giDescription">
    {g->text text="In order for Gallery to properly display this movie, it has to know the movie's width and height.  If you have installed a graphics toolkit that can handle movie types, then these values may already be set.  If not, they may be set to 0.  If you do not enter the correct values here, the movie may appear distorted when viewed in your web browser.  Note that changing these values do <b>not</b> change the movie itself so experimentation won't cause harm."}
  </p>

  <table class="gbDataTable"><tr>
    <td>
      {g->text text="Width"}
    </td><td>
      <input type="text" size="5" name="{g->formVar var="form[width]"}" value="{$form.width}"/>
    </td>
  </tr>

  {if isset($form.error.width.invalid)}
  <tr><td colspan="2" class="giError">
    {g->text text="You must enter a value greater than or equal to 0"}
  </td></tr>
  {/if}

  <tr>
    <td>
      {g->text text="Height"}
    </td><td>
      <input type="text" size="5" name="{g->formVar var="form[height]"}" value="{$form.height}"/>
    </td>
  </tr>

  {if isset($form.error.height.invalid)}
  <tr><td colspan="2" class="giError">
    {g->text text="You must enter a value greater than or equal to 0"}
  </td></tr>
  {/if}
  </table>
</div>

<div class="gbBlock gcBackground1">
  <input type="submit" class="inputTypeSubmit"
   name="{g->formVar var="form[action][save]"}" value="{g->text text="Save"}"/>
</div>
