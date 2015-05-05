# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "hashicorp/precise64"
  config.vm.network "forwarded_port", guest: 80, host: 8080

  # Small hack to allow chmod within the shared folder
  config.vm.synced_folder ".", "/vagrant", :mount_options => ["dmode=777,fmode=666"]
end
