@echo off
color 1f
echo ------------------------------------------------------------
echo Bloqueador / Reedireccionador Web By 2Fac3R (for Win Vista/7
echo ------------------------------------------------------------
set ruta=%windir%\system32\drivers\etc
:Elegir
echo Que desea Hacer?
echo 1.- Bloquear pagina
echo 2.- Localizar ip de una web (Es necesaria para redireccionar paginas)
echo 3.- Redireccionar paginas
echo 4.- Salir
echo.
set /p hacer=._
if %hacer%==1 goto :Bloquear
if %hacer%==2 goto :Ip
if %hacer%==3 goto :Redireccionar
if %hacer%==4 goto :Salir
if not defined %hacer% goto :error
:error
echo Eliga alguna opcion valida!
pause
goto :Elegir
:Bloquear
cls
echo Teclee la pagina a bloquear (ejem. www.facebook.com)
echo.
set /p pag=._
echo 0.0.0.0 %pag%>>%ruta%\hosts
echo Pagina %pag% Bloqueada con exito!
pause
cls
goto :Elegir
:Ip
cls
echo Teclee la pagina que desea conocer su ip
set /p ip=
echo.
ping %ip% -n 1 | find /i "ping a"
echo.
echo Anote los numeros que estan despues de "ping a" (esa es la ip)
echo Cuando termine presione una tecla.
pause>null
cls 
goto :Elegir
:Redireccionar
cls
echo Bienvenido al reedireccionador de paginas web
echo.
echo Teclee la pagina que al introducirla en el navegador sera redireccionada
set /p pag1=._
cls
echo Ahora teclee la ip a donde se va a redireccionar (No sabes la ip? Teclea "ip" en minusculas!)
set /p pag2=._
if %pag2%==ip goto :Ip
cls
echo %pag2% %pag1%>>%ruta%\hosts
echo Reedireccion completada!.
pause
cls
goto :Elegir
:Salir
echo --------------------------------------
echo Tool codded By 2Fac3R for Win Vista/7
echo --------------------------------------
pause>nul
exit