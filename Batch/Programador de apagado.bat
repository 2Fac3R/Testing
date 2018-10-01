@echo off
color 1f
echo ---------------------------------
echo Programador de apagado By 2Fac3R
echo ---------------------------------
echo.
echo Eliga el tiempo que desea apagar el ordenador (en minutos)
set /p time=
set /a tiempo= %time% * 60
shutdown -s -t %tiempo% 
echo.
echo -------------------------------------------
::Gracias por reportar el error madahra
echo Se Apagara el equipo en %Time% minutos
echo Script codded By 2Fac3R
echo -------------------------------------------
pause
exit