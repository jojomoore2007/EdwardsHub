<html>
$vlc = "C:\Program Files (x86)\VideoLan\VLC\vlc.exe"; // or whatever the path to vlc is;
$path_file = "rtp://239.219.90.22:50000"; // you can also retrieve that with a relative path like using realpath(relative_path);

// launch vlc
pclose(popen("start \"$vlc\" \"$path_file\"", "r"));
</html>
