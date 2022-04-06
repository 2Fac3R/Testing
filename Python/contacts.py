from faker import Faker

fake = Faker()
app_name = "crm"
table_name = "contact"
records_number = 20

print("[\n")
for x in range(1,records_number):
    print(
        f"{{\n"
        f"\"model\": \"{app_name}.{table_name}\",\n"
        f"\"pk\": {x},\n"
        f"\"fields\": {{\n"
        f"\"organization\": \"{fake.random_digit()}\",\n"
        f"\"first_name\": \"{fake.first_name()}\",\n"
        f"\"last_name\": \"{fake.last_name()}\",\n"
        f"\"email\": \"{fake.company_email()}\",\n"
        f"\"phone\": \"{fake.phone_number()}\",\n"
        f"\"address\": \"{fake.street_address()}\",\n"
        f"\"city\": \"{fake.city()}\",\n"
        f"\"region\": \"{fake.state()}\",\n"
        f"\"country\": \"{fake.country_code()}\",\n"
        f"\"postal_code\": \"{fake.postcode()}\"\n"
        f"}}\n"
        f"}},\n"
    )
print("]\n")