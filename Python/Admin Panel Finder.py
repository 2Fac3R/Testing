                        # -----------------------------#
                        # Admin Panel Finder By 2Fac!  #
                        #         v1.0 2013            #
                        #                              #  
                        #          UnderC0de           #
                        # -----------------------------#
 
     
import os, sys, httplib
     
os.system("clear")
panel = ["/admin1.php", "/admin1.html", "/admin2.php", "/admin2.html", "/yonetim.php", "/yonetim.html", 
"/yonetici.php", "/yonetici.html", "/ccms/", "/ccms/login.php", "/ccms/index.php", "/maintenance/", 
"/webmaster/", "/adm/", "/configuration/", "/configure/", "/websvn/", "/admin/", "/admin/account.php",
"/admin/account.html","/admin/index.php","/admin/index.html", "/admin/login.php", "/admin/login.html",
"/admin/home.php", "/admin/controlpanel.html", "/admin/controlpanel.php", "/admin.php", "/admin.html", 
"/admin/cp.php", "/admin/cp.html", "/cp.php", "/cp.html", "/administrator/", "/administrator/index.html", 
"/administrator/index.php", "/administrator/login.html", "/administrator/login.php", 
"/administrator/account.html", "/administrator/account.php", "/administrator.php", "/administrator.html", 
"/login.php", "/login.html", "/modelsearch/login.php", "/moderator.php", "/moderator.html", 
"/moderator/login.php", "/moderator/login.html", "/moderator/admin.php", "/moderator/admin.html", 
"/moderator/", "/account.php", "/account.html", "/controlpanel/","/admincontrol.php","/admincontrol.html",
"/adminpanel.php","/adminpanel.html","/admin1.asp","/admin2.asp","/yonetim.asp","/yonetici.asp",
"/admin/account.asp","/admin/index.asp","/admin/login.asp","/admin/home.asp","/admin/controlpanel.asp",
"/admin.asp","/admin/cp.asp","/cp.asp","/administrator/index.asp","/administrator/login.asp",
"/administrator/account.asp","/administrator.asp","/login.asp","/modelsearch/login.asp","/moderator.asp",
"/moderator/login.asp","/moderator/admin.asp","/account.asp","/controlpanel.asp","/admincontrol.asp",
"/adminpanel.asp","/fileadmin/","/fileadmin.php","/fileadmin.asp","/fileadmin.html","/administration/",
"/administration.php","/administration.html","/sysadmin.php","/sysadmin.html","/phpmyadmin/","/myadmin/",
"/sysadmin.asp","/sysadmin/","/ur-admin.asp","/ur-admin.php","/ur-admin.html","/ur-admin/","/Server.php",
"/Server.html","/Server.asp","/Server/","/wp-admin/","/administr8.php","/administr8.html","/administr8/",
"/administr8.asp","/webadmin/","/webadmin.php","/webadmin.asp","/webadmin.html","/administratie/","/admins/",
"/admins.php","/admins.asp","/admins.html","/administrivia/","/Database_Administration/","/WebAdmin/",
"/useradmin/","/sysadmins/","/admin1/","/system-administration/","/administrators/","/pgadmin/","/directadmin/",
"/staradmin/","/ServerAdministrator/","/SysAdmin/","/administer/","/LiveUser_Admin/","/sys-admin/","/typo3/",
"/panel/","/cpanel/","/cPanel/","/cpanel_file/","/platz_login/","/rcLogin/","/blogindex/","/formslogin/",
"/autologin/","/support_login/","/meta_login/","/manuallogin/","/simpleLogin/","/loginflat/","/utility_login/",
"/showlogin/","/memlogin/","/members/","/login-redirect/","/sub-login/","/wp-login/","/login1/","/dir-login/",
"/login_db/","/xlogin/","/smblogin/","/customer_login/","/UserLogin/","/login-us/","/acct_login/",
"/admin_area/","/bigadmin/","/project-admins/","/phppgadmin/","/pureadmin/","/sql-admin/","/radmind/",
"/openvpnadmin/","/wizmysqladmin/","/vadmind/","/ezsqliteadmin/","/hpwebjetadmin/","/newsadmin/","/adminpro/",
"/Lotus_Domino_Admin/","/bbadmin/","/vmailadmin/","/Indy_admin/","/ccp14admin/","/irc-macadmin/",
"/banneradmin/","/sshadmin/","/phpldapadmin/","/macadmin/","/administratoraccounts/","/admin4_account/",
"/admin4_colon/","/radmind-1/","/Super-Admin/","/AdminTools/","/cmsadmin/","/SysAdmin2/","/globes_admin/",
"/cadmins/","/phpSQLiteAdmin/","/navSiteAdmin/","/server_admin_small/","/logo_sysadmin/","/server/",
"/database_administration/","/power_user/","/system_administration/","/ss_vms_admin_sm/","/administrador",
"/administracion","/moderacion","/moderador","/phpMyAdmin/","/phpmyadmin/","/PMA/","/admin/","/dbadmin/",
"/mysql/","/myadmin/","/phpmyadmin2/","/phpMyAdmin2/","/phpMyAdmin-2/","/php-my-admin/","/phpMyAdmin-2.2.3/",
"/phpMyAdmin-2.2.6/","/phpMyAdmin-2.5.1/","/phpMyAdmin-2.5.4/","/phpMyAdmin-2.5.5-rc1/",
"/phpMyAdmin-2.5.5-rc2/","/phpMyAdmin-2.5.5/","/phpMyAdmin-2.5.5-pl1/","/phpMyAdmin-2.5.6-rc1/",
"/phpMyAdmin-2.5.6-rc2/","/phpMyAdmin-2.5.6/","/phpMyAdmin-2.5.7/","/phpMyAdmin-2.5.7-pl1/",
"/phpMyAdmin-2.6.0-alpha/","/phpMyAdmin-2.6.0-alpha2/","/phpMyAdmin-2.6.0-beta1/","/phpMyAdmin-2.6.0-beta2/",
"/phpMyAdmin-2.6.0-rc1/","/phpMyAdmin-2.6.0-rc2/","/phpMyAdmin-2.6.0-rc3/","/phpMyAdmin-2.6.0/",
"/phpMyAdmin-2.6.0-pl1/","/phpMyAdmin-2.6.0-pl2/","/phpMyAdmin-2.6.0-pl3/","/phpMyAdmin-2.6.1-rc1/",
"/phpMyAdmin-2.6.1-rc2/","/phpMyAdmin-2.6.1/","/phpMyAdmin-2.6.1-pl1/","/phpMyAdmin-2.6.1-pl2/",
"/phpMyAdmin-2.6.1-pl3/","/phpMyAdmin-2.6.2-rc1/","/phpMyAdmin-2.6.2-beta1/","/phpMyAdmin-2.6.2-rc1/",
"/phpMyAdmin-2.6.2/","/phpMyAdmin-2.6.2-pl1/","/phpMyAdmin-2.6.3/","/phpMyAdmin-2.6.3-rc1/",
"/phpMyAdmin-2.6.3/","/phpMyAdmin-2.6.3-pl1/","/phpMyAdmin-2.6.4-rc1/","/phpMyAdmin-2.6.4-pl1/",
"/phpMyAdmin-2.6.4-pl2/","/phpMyAdmin-2.6.4-pl3/","/phpMyAdmin-2.6.4-pl4/","/phpMyAdmin-2.6.4/",
"/phpMyAdmin-2.7.0-beta1/","/phpMyAdmin-2.7.0-rc1/","/phpMyAdmin-2.7.0-pl1/","/phpMyAdmin-2.7.0-pl2/",
"/phpMyAdmin-2.7.0/","/phpMyAdmin-2.8.0-beta1/","/phpMyAdmin-2.8.0-rc1/","/phpMyAdmin-2.8.0-rc2/",
"/phpMyAdmin-2.8.0/","/phpMyAdmin-2.8.0.1/","/phpMyAdmin-2.8.0.2/","/phpMyAdmin-2.8.0.3/",
"/phpMyAdmin-2.8.0.4/","/phpMyAdmin-2.8.1-rc1/","/phpMyAdmin-2.8.1/","/phpMyAdmin-2.8.2/",
"/phpMyAdmin-3.4.6-rc1/","/phpMyAdmin-3.4.5/","/phpMyAdmin-3.4.4/","/phpMyAdmin-3.3.10.4/",
"/phpMyAdmin-3.4.3.2/","/phpMyAdmin-3.3.10.3/","/phpMyAdmin-3.4.3.1/","/phpMyAdmin-3.4.3/",
"/phpMyAdmin-3.4.2/","/phpMyAdmin-3.4.1/","/phpMyAdmin-3.3.10.1/","/phpMyAdmin-3.4.0/","/phpMyAdmin-3.3.10/",
"/phpMyAdmin-2.1.0/","/phpMyAdmin-2.0.5/","/phpMyAdmin-1.3.0/","/phpMyAdmin-1.1.0/","/phpMyAdmin-3.3.9.2/",
"/phpMyAdmin-2.11.11.3/","/phpMyAdmin-3.3.9.1/","/phpMyAdmin-3.3.9/","/phpMyAdmin-3.3.8.1/",
"/phpMyAdmin-2.11.11.1/","/phpMyAdmin-3.3.8/","/phpMyAdmin-3.3.7/","/phpMyAdmin-2.11.11/",
"/phpMyAdmin-3.3.6/","/phpMyAdmin-3.3.5.1/","/phpMyAdmin-2.11.10.1/","/sqlmanager/","/mysqlmanager/","/p/m/a/",
"/PMA2005/","/pma2005/","/phpmanager/","/php-myadmin/","/phpmy-admin/","/webadmin/","/sqlweb/","/websql/",
"/webdb/","/mysqladmin/","/mysql-admin/"]
 
def h():
    print """
                        # -----------------------------#
                        # Admin Panel Finder By 2Fac!  #
                        #         v1.0 2013            #
                        #                              #  
                        #        UnderC0de.Org         #
                        # -----------------------------#
    """
     
h()
     
def uso():
    print "\n Sintaxis : ", sys.argv[0] , " <host> \n"
 
def greets():
    print """
    
    \t\tGr33tz to: 
    
    \nxt3mp, arcangel_nigth, ANTRAX, 11Sep, Kr34t0r, GAMARRA, SkippyCreammy,
    \nv1c0_h4ck, w4rning, etc, etc .
    \n\t\t\t Underc0de.Org"""
     
def res(url , path):
    con = httplib.HTTPConnection(url)
    con.request("GET", path)
    return con.getresponse().status    
     
def buscar(url):
    print "\n Searching...\n\n"
    for path in panel:
        try:
            code = res(url, path)
            if code == 200:
                print "FOUND --> " + url + path
        except(KeyboardInterrupt):
            uso()
        except:
            pass
        
if len(sys.argv) != 2 :
    uso()
     
else:
    buscar(sys.argv[1])
    
greets()
 