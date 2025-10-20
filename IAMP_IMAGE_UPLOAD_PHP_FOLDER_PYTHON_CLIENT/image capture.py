import cv2
import requests
import os

# -------------------------
# ১️⃣ Try to open webcam
# -------------------------
cap = cv2.VideoCapture(0)
ret, frame = cap.read()

if ret:
    # Webcam কাজ করলে captured image save করো
    img_name = "captured_image.jpg"
    cv2.imwrite(img_name, frame)
    print("Webcam image captured:", img_name)
else:
    # Webcam কাজ না করলে default image path দাও
    img_name = "default.jpg"  # path ঠিক রাখো
    if not os.path.exists(img_name):
        raise FileNotFoundError(f"{img_name} not found!")
    print("Webcam not available, using default image:", img_name)

cap.release()

# -------------------------
# ২️⃣ Upload image to server
# -------------------------
# এখানে সঠিক URL ব্যবহার করো
url = "http://localhost:8080/upload.php"

with open(img_name, 'rb') as f:
    files = {'image': f}
    try:
        response = requests.post(url, files=files)
        print("Response code:", response.status_code)
        print("Response text:", response.text)
    except requests.exceptions.RequestException as e:
        print("Error uploading image:", e)
