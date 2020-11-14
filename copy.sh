rm -rf download
git clone https://github.com/RevengeOS-Devices/official_devices.git download
for f in $PWD/download/*;
  do 
     [ -d $f ] && cd "$f" && echo Entering into $f && cp ~/download-center/assets/downloadpg/index.php  "$f"
  done;

