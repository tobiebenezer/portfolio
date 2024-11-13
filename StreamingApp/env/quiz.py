def tempForMonth(c_year, c_mon, predict_year, predict_mon, c_tem, c_o3, a):

    if (predict_year - c_year) > 0:
        year_diff = (predict_year - c_year - 1)
        num_mon_left = 12 - c_mon
        num_mon = year_diff * 12 + num_mon_left + predict_mon
    else:
        year_diff = 0
        num_mon = year_diff * 12 + predict_mon - c_mon

   
    return  c_tem + (a*(num_mon)) * c_o3


# temp = tempForMonth(2024,2,2024,5,20,0.0003,50)
# print(temp)

temperature_data = {
    "00:00": 18,
    "03:00": 16,
    "06:00": 20,
    "09:00": 22,
    "12:00": 25,
    "15:00": 24,
    "18:00": 23,
    "21:00": 19
}

# Function to find the maximum and minimum temperatures from the dictionary


def find_max_min_temperature(temperature_data):
    max_temperature = max(temperature_data.values())
    min_temperature = min(temperature_data.values())
    return max_temperature, min_temperature


# Calling the function to get the maximum and minimum temperatures
max_temp, min_temp = find_max_min_temperature(temperature_data)

# Displaying the maximum and minimum temperatures
# print(f"Maximum temperature for the day: {max_temp} degrees")
# print(f"Minimum temperature for the day: {min_temp} degrees")


def categorize_humidity(temp, a_water):
    relative_humidity = (temp / a_water) * 100
    if relative_humidity < 5:
        return "Low"
    elif 5 <= relative_humidity <= 11:
        return "Moderate"
    else:
        return "High"


a_water = 30  # Replace with the actual temperature in Celsius
max_temp = 20
# Categorize humidity level
humidity_category = categorize_humidity(max_temp,a_water)

# Display the humidity level
# print(f"The humidity level in the city is: {humidity_category}")


def categorize_hurricanes(wind_speeds):
    categories = []

    for speed in wind_speeds:
        if speed < 74:
            categories.append("Not a hurricane")
        elif 74 <= speed <= 95:
            categories.append("Category 1")
        elif 96 <= speed <= 110:
            categories.append("Category 2")
        elif 111 <= speed <= 129:
            categories.append("Category 3")
        elif 130 <= speed <= 156:
            categories.append("Category 4")
        else:
            categories.append("Category 5")

    return categories


# Example list of wind speeds
wind_speed_list = [80, 100, 120, 140, 160, 70]

# Categorize the hurricanes in the list
hurricane_categories = categorize_hurricanes(wind_speed_list)

# Display the hurricane categories for the provided wind speeds
for index, speed in enumerate(wind_speed_list):
    print(f"Wind speed: {speed} mph - Category: {hurricane_categories[index]}")
