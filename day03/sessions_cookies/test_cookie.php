<?php

    var_dump($_COOKIE);

    # define the cookie is valid under which sub_domain
setcookie("course","php",time()+3600,"/application_nasrcity/day03","",0,0);

# www.test.com/admin
# www.test.com/user


