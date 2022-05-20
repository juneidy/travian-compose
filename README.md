# travian-compose
[TravianZ](https://github.com/Shadowss/TravianZ) in docker-compose

## Setup

1. Update directory ownership of `appdata/TravianZ` to `33:33`: `sudo chown -R
   33:33 appdata/TravianZ`
1. Start the compose `docker compose up` (This will build the local image too)
1. Navigate to `http://localhost` in your browser and follow the setup
   instructions. The instructions assume you're in the `appdata/TravianZ`
   directory.
1. Database name, username and password are all `travian`
1. Once setup is completed, follow the post-setup instructions. The instructions
   assume you're in the `appdata/TravianZ` directory.
