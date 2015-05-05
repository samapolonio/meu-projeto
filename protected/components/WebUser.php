<?php
class WebUser extends CWebUser
{
private $_user;
 
//get the logged user
function getUser()
{
if ($this->isGuest)
return;
 
if( $this->_user === null )
{
$this->_user = Usuarios::model()->findByPk( $this->id );
}
return $this->_user;
}
 
//Admin?
function getIsAdmin()
{
return ( $this->user && $this->user->admin == 1 );
}
 
}
 
?>