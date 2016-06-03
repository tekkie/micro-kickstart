# API Kickstarter

## Prerequisites

Make sure you have Docker [installed][docker-install] and running.

### OSX

* download the [Docker Toolbox][docker-install-osx] and install it
* start the virtual machine:
```bash
./bin/docker-osx-start
```

## Setup

Clone the repo
```bash
$ git clone git@github.com:tekkie/micro-kickstart.git
$ cd micro-kickstart
```

Start the needed containers
```bash
$ ./bin/micro start
```

Verify that everything is working as expected: load
[http://micro.dev:8080/status](http://micro.dev:8080/status) in your browser
and see that you receive a nice JSON.

[docker-install]: https://docs.docker.com/engine/installation/
[docker-install-osx]: https://www.docker.com/products/docker-toolbox
