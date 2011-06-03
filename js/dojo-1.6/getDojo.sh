#!/bin/sh
# I've not added the dojo release or the dojo src to the repo, as they're large. Run this instead

# Download the archive as a tar.gz. You could just as easily get the zip file
wget http://download.dojotoolkit.org/release-1.6.1/dojo-release-1.6.1.tar.gz ./

# Unpack the archive
tar -xvf dojo-release-1.6.1.tar.gz

# Move the contents of the newly unpacked folder into this folder
mv dojo-release-1.6.1/* ./

# Remove (delete) the archive and the now empty folder it contained
rm  -Rf dojo-release*
