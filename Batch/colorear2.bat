@echo off
:Return
set test=%random%
set var=%test:~-1%
color %var%
ping 127.0.0.1 -n 5>nul | echo Hola%var%
goto :Return