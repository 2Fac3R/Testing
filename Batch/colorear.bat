@echo off
cls
for /L %%c in (0, 1, 6) do (
color %%c
pause>nul
echo hola%%c
pause > nul
)