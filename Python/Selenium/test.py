from selenium import webdriver
from selenium.webdriver.common.by import By

driver = webdriver.Chrome()

driver.get('https://randomtodolistgenerator.herokuapp.com/library')

task_title_list = driver.find_elements_by_class_name("task-title div")
for title in task_title_list:
    print(title.text)

card_text_list = driver.find_elements_by_class_name("card-text")

# for card in card_text_list:
#     print(card.text)

