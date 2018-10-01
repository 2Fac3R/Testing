@echo off
:Main
color 1f
echo -----------------------------------------------------------
echo Des-Bloqueador / Reedireccionador Web v1.2 By 2Fac3R
echo -----------------------------------------------------------
set ruta=%windir%\system32\drivers\etc
:Elegir
echo Que desea Hacer?
echo 1.- Bloquear pagina
echo 2.- Localizar ip de una web (Es necesaria para redireccionar paginas)
echo 3.- Redireccionar paginas
echo 4.- Desbloquear una pagina
echo 5.- Salir
echo.
set /p hacer=__ 
if %hacer%==1 goto :Bloquear
if %hacer%==2 goto :Ip
if %hacer%==3 goto :Redireccionar
if %hacer%==4 goto :Desbloquear
if %hacer%==5 goto :Salir
if not defined %hacer% goto :error
:error
Msg * "Eliga alguna opcion valida!"
cls
goto :Elegir
:Bloquear
cls
echo Teclee la pagina a bloquear (ejem. www.facebook.com)
echo.
set /p pag=._
echo 0.0.0.0 %pag%>>%ruta%\hosts
msg * "Pagina %pag% Bloqueada con exito!"
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
Msg * "Reedireccion completada!"
pause
cls
goto :Elegir
:Desbloquear
cls
echo ------------------------ 
echo Desbloqueador de Paginas
echo -------------------------
echo PROCEDIMIENTO
echo Ir a la zona de abajo y borrar algo como "0.0.0.0 www.paginabloqueada.com" 
echo despues ir a Archivo -- Guardar -- Archivo -- Salir.
echo.
echo Presione una tecla para ir al editor & pause>nul
Start "Desbloqueador de webs By 2Fac3R" edit %ruta%\hosts
echo Cuando Termine de Desbloquear, presione una tecla para continuar... & pause>nul && Msg * "La pagina ha sido Desbloqueada con exito"
cls
goto :Elegir
:Salir
echo ----------------------
echo Tool codded By 2Fac3R
echo ----------------------
pause>nul
exit