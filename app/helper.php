<?php
    function message($route = null, $type = null, $message = null)
    {return redirect()->route($route)->with($type, $message." successfully");}
