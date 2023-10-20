# Cronos Task Manager

## Overview

The Cronos plugin is a task manager for WordPress websites, designed to enhance the reliability and punctuality of wp-cron task execution. It operates seamlessly in the background, automatically monitoring and optimizing task execution without requiring extensive user configuration. Users can also integrate Cronos with their API by providing an API key and enjoy secure communication. Additionally, users have the option to add custom tasks via the plugin's user interface.

## Features

- **Automated Task Management**: Cronos acts as a manager for wp-cron tasks, ensuring that scheduled tasks are executed reliably and on time without the need for manual intervention.

- **Secure API Integration**: Users can effortlessly integrate Cronos with their API by providing an API key, and all data communication between the site and API is secured. Any stored job data on the API server is encrypted with a keypair, with only the user's site having access to the private key.

- **Minimal Data Transmission**: Cronos prioritizes user privacy and security. It only transmits essential data, such as your API key, the site's URL, the task's schedule, and how many times to run it. No personally identifiable information (PII) is sent.

- **Custom Task Addition**: For users who want additional control, Cronos provides a user-friendly interface to add custom tasks with specific scheduling requirements if needed.

## Installation

To install the Cronos plugin, follow these straightforward steps:

1. Download the plugin ZIP file from the [Cronos GitHub repository](https://github.com/cronos) or the [WordPress Plugin Directory](https://wordpress.org/plugins/cronos/).

2. Log in to your WordPress admin dashboard.

3. Navigate to "Plugins" > "Add New."

4. Click the "Upload Plugin" button.

5. Choose the ZIP file you downloaded in step 1 and click "Install Now."

6. Once the installation is complete, click "Activate Plugin."

## Configuration

Cronos is designed for ease of use, requiring minimal configuration from users. After activation, follow these steps to set up and customize the plugin:

1. **Access Cronos Settings**:
   - In your WordPress dashboard, go to "Settings" > "Cronos."

2. **Secure API Integration**:
   - Enter your API key to enable secure communication with your external service, knowing that all data transmission is encrypted.

3. **Custom Task Management**:
   - Use the user interface to add custom tasks with specific scheduling requirements if needed.

4. **Save Changes**:
   - Click the "Save Changes" button to apply your settings.

## Usage

Cronos seamlessly manages your wp-cron tasks, ensuring punctual execution and reliability while prioritizing user privacy and data security. Here's how to make the most of the plugin:

- **Automated Task Management**: Let Cronos handle the scheduling and execution of wp-cron tasks automatically.

- **Secure API Integration**: Enjoy secure communication with your external services by entering your API key in the settings, knowing that all data is transmitted and stored securely.

- **Custom Tasks** (Optional): If you require custom scheduling, use the plugin's user interface to add specific tasks with tailored schedules.

## Frequently Asked Questions

### How does Cronos ensure data security?

Cronos prioritizes user data security. All data communication between the site and API is secured, and any stored job data on the API server is encrypted with a keypair. Only your site has access to the private key.

### What data is transmitted to the API?

Cronos only transmits essential data, such as the site's homepage URL stored in the options table, the frequency with which to run the job, and the iteration count (how many times to run the job total). No personally identifiable information (PII) is sent.

### Can I add custom tasks with Cronos?

Yes, Cronos provides a user-friendly interface for adding custom tasks with specific scheduling requirements, giving you additional control when needed.

## Support and Feedback

If you encounter any issues, have questions, or would like to provide feedback, please submit an [issue](https://github.com/gh-o-st/cronos/issues) on GitHub.

## Contributing

We welcome contributions from the community! If you'd like to get involved in the development of Cronos, please check out our [GitHub repository](https://github.com/cronos) for more information on how to contribute.

## License

Cronos is released under the [GPL-3.0](https://www.gnu.org/licenses/gpl-3.0.en.html#license-text) license.

---


At Cronos, we take data privacy very seriously. Unlike many other services, our approach is unique because we DON'T want your data.
